<footer class="main-footer">
    <div class="footer-left">
      Copyright &copy; 2023 <div class="bullet"></div> Design By <a href="https://nauval.in/">Hannes Tigor Hamonangan Sinaga</a>
    </div>
    <div class="footer-right">
      
    </div>
</footer>

<script>
  // Fungsi untuk mengambil waktu saat ini
  function showDateTime() {
    const now = new Date();
    const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    const day = days[now.getDay()];
    const date = now.getDate();
    const month = months[now.getMonth()];
    const year = now.getFullYear();
    const hours = now.getHours();
    const minutes = now.getMinutes();
    const seconds = now.getSeconds();

    // Menampilkan waktu saat ini dalam format yang diinginkan
    const dateTime = `${day}, ${date} ${month} ${year} ${hours}:${minutes}:${seconds}`;
    document.getElementById('datetime').innerHTML = dateTime;

    // Mengulangi fungsi setiap 1 detik
    setTimeout(showDateTime, 1000);
  }

  showDateTime(); // Memanggil fungsi saat halaman dimuat
</script>


<!-- General JS Scripts -->
<script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
<script src="{{ asset('assets/modules/popper.js') }}"></script>
<script src="{{ asset('assets/modules/tooltip.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('assets/modules/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/stisla.js') }}"></script>

<!-- JS Libraies -->
<script src="{{ asset('assets/modules/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js') }}"></script>
<script src="{{ asset('assets/modules/jquery-ui/jquery-ui.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('assets/modules/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Template JS File -->
<script src="{{ asset('js/table.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

</body>
</html>