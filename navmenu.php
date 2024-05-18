<div>
  <nav class="nav-bar sticky">
    <div class="logo">
      <a href="index.php"><img src="img/logo.png" alt=""></a>
    </div>
    <ul class="primary_navigation">
      <li><a href="#"><i class="bi bi-house-door-fill"></i>Home</a></li>
      <li><a onclick="scrollToMuseum()" href="#"><i class="bi bi-house-door-fill"></i>Museum</a></li>
      <li><a href="#" onclick="toggleL()"><i class="bi bi-ticket-fill"></i> Book Ticket</a></li>
      <li><a href="#" onclick="toggleN()"><i class="bi bi-bell-fill"></i>Notice</a></li>
    </ul>
    <ul class="secondary_navigation">
      <li><a href="#" id='login' onclick="toggleL()"> Login</a></li>
      <li><a href="#" id='register' onclick="toggleR()">Register</a></li>
    </ul>
  </nav>
</div>
<script>
function scrollToMuseum() {
  const museumSection = document.getElementById('museum-info');
  museumSection.scrollIntoView({
    behavior: 'smooth'
  });
}
</script>