import requests
from bs4 import BeautifulSoup

# URL halaman berita
url = "https://semarangkota.go.id/id/news"

# Header supaya tidak dianggap bot
headers = {
    "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64)"
}

# Kirim permintaan GET
response = requests.get(url, headers=headers)

# Cek status
if response.status_code == 200:
    soup = BeautifulSoup(response.text, 'html.parser')

    # Cari semua elemen berita (tergantung struktur HTML, bisa berubah)
    articles = soup.find_all('div', class_='blog-list-item')  # kelas bisa berubah

    print("Daftar Berita:")
    for article in articles:
        title = article.find('h4')  # tag judul
        link = article.find('a', href=True)  # ambil URL
        date = article.find('span', class_='date')  # tanggal berita

        if title and link:
            print("Judul:", title.text.strip())
            print("Link:", "https://semarangkota.go.id" + link['href'])
            if date:
                print("Tanggal:", date.text.strip())
            print("-" * 40)
else:
    print("Gagal mengakses halaman. Status code:", response.status_code)
