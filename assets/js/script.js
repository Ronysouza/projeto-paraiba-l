window.addEventListener('scroll',function(){
        if(window.scrollY > 133){
            document.querySelector('.menu').classList.add('navbar-fixed-top')

        }else{
          
            document.querySelector('.menu').classList.remove('navbar-fixed-top')
        }
})


 

 document.getElementById('botao-menu').addEventListener('click',function(){
  
        $('.menu-mobile').animate({

                opacity:'toggle'
        },500)
        
 })