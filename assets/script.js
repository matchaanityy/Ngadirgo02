function toggleSidebar() {
  const sidebar = document.getElementById('sidebar');
  sidebar.classList.toggle('collapsed');

  if (sidebar.classList.contains('collapsed')) {
    document.body.style.marginLeft = "80px";
  } else {
    document.body.style.marginLeft = "250px";
  }
}
