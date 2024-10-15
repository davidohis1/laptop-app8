// function change(){
//         var header = document.getElementById('header');
//         var h2 = document.getElementById('h1'); 
//         var h2 = document.getElementById('h2'); 
//         h1.innerText='THE PERFECT CUBICLE';
//         h2.innerHTML='Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br> Voluptates corporis corrupti magni quisquam voluptatum <br>consequatur incidunt optio animi ratione architecto!';
//         header.style.background = 'linear-gradient(rgba(80, 75, 75, 0.55),rgb(26, 27, 29,0.99)),url(images/book2.jpeg)';
//     }

//     function change2(){
//         var header = document.getElementById('header');
//         var h2 = document.getElementById('h1'); 
//         var h2 = document.getElementById('h2'); 
//         h1.innerText='THE ILARO BOOKSTORE';
//         h2.innerHTML='Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br> Voluptates corporis corrupti magni quisquam voluptatum <br>consequatur incidunt optio animi ratione architecto!';
//         header.style.background = 'linear-gradient(rgba(80, 75, 75, 0.55),rgb(26, 27, 29,0.99)),url(images/books1.webp)';
//     }

// let next = document.querySelector('.next')
// let prev = document.querySelector('.prev')

// next.addEventListener('click', function(){
//     let items = document.querySelectorAll('.item')
//     document.querySelector('.slide').appendChild(items[0])
// })

// prev.addEventListener('click', function(){
//     let items = document.querySelectorAll('.item')
//     document.querySelector('.slide').prepend(items[items.length - 1]) // here the length of items = 6
// })


const section21 = document.querySelectorAll('.section21');

window.addEventListener('scroll', checkSection);

checkSection();

function checkSection(){
    const triggerbottom = window.innerHeight  / 5 * 4;

    section21.forEach((section)=>{
        const sectop = section.getBoundingClientRect().top;

        if (sectop < triggerbottom){
            section.classList.add('show');
        }else{
            box.classList.remove('show');
        }
    });
}


              