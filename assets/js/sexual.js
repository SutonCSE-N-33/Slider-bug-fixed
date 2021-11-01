// Sidebar and Thambnail JS Start
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');
const slider = document.querySelector('.slider');


prevBtn.addEventListener('click',function(){
    slider.scrollLeft += 220;
    console.log("I am First");
})
nextBtn.addEventListener('click',function(){
    slider.scrollLeft -= 220;
    console.log("I am next");
})


let sliderWidth = slider.scrollWidth - slider.clientWidth;

function autoplay(){
    if(slider.scrollLeft > sliderWidth ){
        slider.scrollLeft -= sliderWidth;
    }else{
        slider.scrollLeft += 1;
    }
}

let play = setInterval(autoplay, 50);

const thumbnails = document.querySelectorAll('.thumbnail');
for(i=0; i<thumbnails.length; i++){
    thumbnails[i].addEventListener('mouseover',function(){
        clearInterval(play);
    });

    thumbnails[i].addEventListener('mouseout',function(){
        return play = setInterval(autoplay, 50);
    })

}

                //videos
  const videos = ["https://www.youtube.com/embed/FQ2gX8qQR_Y","https://www.youtube.com/embed/kBwrVEzKnrU","https://www.youtube.com/embed=mLL4ZDO8yu8","https://www.youtube.com/embed/5i6Pry-MkwY","https://www.youtube.com/embed/2AdEIyVUuxo","https://www.youtube.com/embed/9W1czfZU6SI","https://www.youtube.com/embed/RRi6UqNZhvU","https://www.youtube.com/embed/Cy8NA8SJewM","https://www.youtube.com/embed/nXN_Sixw16s","https://www.youtube.com/embed/-sEerYN7EUE"];

  
  for(let j = 0; j<videos.length; j++){
     for(let k = 0; k<thumbnails.length; k++){
         thumbnails[k].addEventListener('click',function(){
             document.querySelector('.video-slider').src = `${videos[k]}`;
         })
     }
 }

// //Sidebar and Thambnail JS End
