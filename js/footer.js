const createFooter = () => {
    let footer = document.querySelector('footer');

    footer.innerHTML = `
    <div class="footer-content">
        <img src="assets/shreklogo.png" class="logo" alt="">
        <div class="footer-ul-container">
            <ul class="category">
                <li class="category-title">men</li>
                <li><a href="#" class="footer-link">casio</a></li>
                <li><a href="#" class="footer-link">fossil</a></li>
                <li><a href="#" class="footer-link">seiko</a></li>
                <li><a href="#" class="footer-link">tissot</a></li>
            </ul>
            <ul class="category">
                <li class="category-title">women</li>
                <li><a href="#" class="footer-link">casio</a></li>
                <li><a href="#" class="footer-link">fossil</a></li>
                <li><a href="#" class="footer-link">seiko</a></li>
                <li><a href="#" class="footer-link">tissot</a></li>
            </ul>
        </div>
    </div>
    <p class="footer-title">about us</p>
      <p class="info">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat tempore ad suscipit, eos eius quisquam sed optio nisi quaerat fugiat ratione et vero maxime praesentium, architecto minima reiciendis iste quo deserunt assumenda alias ducimus. Ullam odit maxime id voluptates rerum tenetur corporis laboriosam! Cum error ipsum laborum tempore in rerum necessitatibus nostrum nobis modi! Debitis adipisci illum nemo aperiam sed, et accusamus ut officiis. Laborum illo exercitationem quo culpa reprehenderit excepturi distinctio tempore cupiditate praesentium nisi ut iusto, assumenda perferendis facilis voluptas autem fuga sunt ab debitis voluptatum harum eum. Asperiores, natus! Est deserunt incidunt quasi placeat omnis, itaque harum?</p>
      <p class="info">support emails - help@clothing.com, customersupport@clothing.com</p>
      <p class="info">telephone - 6123 4567</p>
      <div class="footer-social-container">
          <div>
              <a href="#" class="social-link">terms & services</a>
              <a href="#" class="social-link">privacy page</a>
          </div>
          <div>
              <a href="#" class="social-link">instagram</a>
              <a href="#" class="social-link">facebook</a>
              <a href="#" class="social-link">twitter</a>
          </div>
      </div>
      <p class="footer-credit">Shop Watches Online</p>
      `;
}

createFooter();
