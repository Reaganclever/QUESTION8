const images = document.querySelectorAll(".card img");

images.forEach(image => {

    image.addEventListener("mouseover", function(){

        let background = this.getAttribute("data-bg");

        document.body.style.backgroundImage = `url('${background}')`;

    });

    image.addEventListener("click", function(){

        let background = this.getAttribute("data-bg");

        document.body.style.backgroundImage = `url('${background}')`;

    });

});