import requests
from bs4 import BeautifulSoup
import mysql.connector
import datetime

# URL target
url = 'https://semarangkota.go.id/en/news'

# Ambil konten dari halaman web
response = requests.get(url)
soup = BeautifulSoup(response.text, 'html.parser')

# Cari semua berita

berita_items = soup.find_all('div', class_='blog-grid')
print(f"Jumlah berita ditemukan: {len(berita_items)}")

# Koneksi ke database
conn = mysql.connector.connect(
    host='localhost',
    user='root',
    password='',  # kosongkan jika tidak ada password
    database='sd'
)
cursor = conn.cursor()

# Loop setiap berita
for item in berita_items:
    judul_tag = item.find('h4')
    link_tag = item.find('a', href=True)

    if judul_tag and link_tag:
        judul = judul_tag.get_text(strip=True)
        link = link_tag['href']
        full_url = 'https://semarangkota.go.id/en/news' + link
        tanggal = datetime.date.today()  # gunakan tanggal hari ini
        isi = ''  # belum mengambil isi lengkap
        foto_berita = full_url  # pakai URL halaman berita sebagai pengganti

        # Cek apakah judul sudah pernah dimasukkan
        cursor.execute("SELECT COUNT(*) FROM berita WHERE judul = %s", (judul,))
        if cursor.fetchone()[0] == 0:
            # Masukkan data ke tabel berita
            cursor.execute(""" INSERT INTO berita (judul, isi, tanggal, foto_berita) VALUES (%s, %s, %s, %s)
            """, (judul, isi, tanggal, foto_berita))
            print(f"✅ Disimpan: {judul}")
        else:
            print(f"⚠️ Sudah ada: {judul}")

# Simpan & tutup koneksi
conn.commit()
cursor.close()
conn.close()
