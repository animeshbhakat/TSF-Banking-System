<?php include('navbar.php'); ?>

<main>
  <section id="home">
    <header id="showcase">
      <div class="showcase-content">
        <h1 class="l-heading">
          Tesseract Bank
        </h1>
        <p class="lead">Safe &nbsp; Secure &nbsp; and &nbsp; Reliable!</p>
        <a href="#about" class="btn">More About Us</a>
      </div>
    </header>
  </section>

  <section id="about">
    <div class="about-img"></div>
    <div class="about-text bg-light p-2">
      <h2 class="m-heading"><span class="text-primary">About</span>   Us</h2>
      <p>A bank is a financial institution that accepts deposits from the public and creates a demand deposit while simultaneously making loans. Lending activities can be directly performed by the bank or indirectly through capital markets.</br> </br> Because banks play an important role in financial stability and the economy of a country, most jurisdictions exercise a high degree of regulation over banks. Most countries have institutionalised a system known as fractional reserve banking, under which banks hold liquid assets equal to only a portion of their current liabilities. In addition to other regulations intended to ensure liquidity, banks are generally subject to minimum capital requirements based on an international set of capital standards, the Basel Accords.</br></br> Banking in its modern sense evolved in the fourteenth century in the prosperous cities of Renaissance Italy but in many ways functioned as a continuation of ideas and concepts of credit and lending that had their roots in the ancient world. In the history of banking, a number of banking dynasties – notably, the Medicis, the Fuggers, the Welsers, the Berenbergs, and the Rothschilds – have played a central role over many centuries. </p>
    </div>
  </section>


  <section id="services" class="bg-dark py-1">
    <div class="container">
      <h2 class="m-heading text-center"><span class="text-primary">Services</span></h2>
      <div class="items">
        <div class="item">
          <i class="fas fa-user fa-2x"></i>
          <div>
            <h3>User Info</h3>
            <p>A user is a person who utilizes a computer or network service. A user often has a user account and is identified to the system by a username.</p>
            <a href="users.php" class="btn">Users</a>
          </div>
        </div>
        <div class="item">
          <i class="fas fa-hand-holding-usd fa-2x"></i>
          <div>
            <h3>Send Money</h3>
            <p>Send money to any account in seconds without any hassle. We ensure a safe and secure transaction with instant online money transfer.</p>
            <a href="transfer_money.php" class="btn">Transfer Money</a>
          </div>
        </div>
        <div class="item">
          <i class="fas fa-dollar-sign fa-2x"></i>
          <div>
            <h3>Tranasaction History</h3>
            <p>Check your transaction history. You can find a list of your transactions, search your transactions, and find transactions by businesses you spent money at.</p>
            <a href="transactionhistory.php" class="btn">Transaction History</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
      <div class="contact-form bg-primary p-2">
        <h2 class="m-heading">Contact Us</h2>
        <h2 class="s-heading">Please use the form below to contact us</h2>
        <form>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter Name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter Email">
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" name="phone" id="phone" placeholder="Enter Phone Number">
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" placeholder="Enter Message"></textarea>
          </div>
          <input type="submit" value="Send" class="btn btn-dark">
        </form>
      </div>
</section>


  <!-- Footer -->
  <footer id="main-footer" class="bg-dark text-center py-1">
      <div class="container">
        <p>Copyright &copy; 2021, Tesseract Bank, All Rights Reserved</p>
      </div>
    </footer>
    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Main JS file -->
    <script src="js/main.js"></script>

</main>