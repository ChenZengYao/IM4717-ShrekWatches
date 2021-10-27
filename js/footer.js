const createFooter = () => {
    let footer = document.querySelector('footer');

    footer.innerHTML = `
    <div class="footer-content">
        <div class="footer-logo-center">
            <img src="assets/shreklogo_light.png" class="logo" alt="">
        </div>
        <div class="footer-text-center">
            <p class="footer-title">About Us</p>
            <p class="info">Shrek Watches is an e-commerce website with the aim to sell mid-range luxury watches to customers with a comfortable spending power. As an online retail store, we are promoting 4 main brands, Casio, Seiko, Fossil and Tissot to suit the needs of both men and women.</p>
            <p class="info">Support Email - f32ee@localhost</p>
            <p class="info">Telephone - 6123 4567</p>
        </div>
    </div>
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
