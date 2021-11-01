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

//                 //videos
//   const videos = ["https://www.youtube.com/embed/FQ2gX8qQR_Y","https://www.youtube.com/embed/kBwrVEzKnrU","https://www.youtube.com/embed=mLL4ZDO8yu8","https://www.youtube.com/embed/5i6Pry-MkwY","https://www.youtube.com/embed/2AdEIyVUuxo","https://www.youtube.com/embed/9W1czfZU6SI","https://www.youtube.com/embed/RRi6UqNZhvU","https://www.youtube.com/embed/Cy8NA8SJewM","https://www.youtube.com/embed/nXN_Sixw16s","https://www.youtube.com/embed/-sEerYN7EUE"];

  
//   for(let j = 0; j<videos.length; j++){
//      for(let k = 0; k<thumbnails.length; k++){
//          thumbnails[k].addEventListener('click',function(){
//              document.querySelector('.video-slider').src = `${videos[k]}`;

//          })
//      }
//  }



//  const content = document.querySelector('.content');
//  const modal = document.querySelector('.modal');
//  const clsBtn = document.querySelector('.cls-btn');
//  content.addEventListener('click',function(e){
//      e.preventDefault();
//      modal.style.display = 'block';
//  })

//  clsBtn.addEventListener('click',function(e){
//     e.preventDefault();
//     modal.style.display = 'none';
//  })
 

// //Sidebar and Thambnail JS End

function Suton(name,videos){
    this.name = name;
    this.videos = videos;
}
let dataArray = [];
console.log(dataArray);

function nazrul(name,videos){
         let dataObject = new Suton(name,videos);
         dataArray.push(dataObject);
}

const content = document.querySelector('.content');
      const modal = document.querySelector('.modal');
     const modalContent = document.querySelector('.modal-dialog');

     


for(let k = 0; k<thumbnails.length; k++){
              thumbnails[k].addEventListener('click',function(){
                  document.querySelector('.video-slider').src = `${dataArray[k].videos}`;
                   let imgTitle = thumbnails[k].textContent;
                  content.addEventListener('click',function(e){
                    e.preventDefault();
                    modal.style.display = 'block';
                    const parent = document.createElement('div');
                    parent.classList.add('modal-content');
                    parent.innerHTML = `<div class="modal-header">
                    <h5 class="modal-title">${imgTitle}</h5>
                    <button type="button" class="btn-close" value='1' data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>${dataArray[k].name}</p>
                  </div> 
                  <div class="modal-footer">
                    <button type="button" class="btn cls-btn btn-secondary" value='1' data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>`;
                  modalContent.appendChild(parent);       
                })
             })
      }


      nazrul(`Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto,
temporibus eligendi tempora, quas perspiciatis accusantium error 
necessitatibus recusandae corrupti quod incidunt ab ea amet neque 
ratione suscipit, consectetur delectus quaerat deleniti earum illum
 quis laborum. Illo ducimus neque corporis tenetur, vero eius nihil, 
 laboriosam provident illum quos perspiciatis autem exercitationem 
 similique at in excepturi? Eius voluptatem odit dolorem aliquid esse
  at aspernatur, neque suscipit, tempore quia recusandae, quo minima 
  vero non molestiae temporibus voluptates placeat quaerat provident. 
  Eveniet vero vel, veritatis hic ea illo nostrum cum! Quia ratione iure
   vero facilis a? Corporis omnis amet quasi quo. Impedit necessitatibus
    veniam maiores dolores deserunt eligendi totam amet,`,"https://www.youtube.com/embed/xcZpjKr3ih8");
nazrul(`Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto,
temporibus eligendi tempora, quas perspiciatis accusantium error 
necessitatibus recusandae corrupti quod incidunt ab ea amet neque 
ratione suscipit, consectetur delectus quaerat deleniti earum illum
 quis laborum. Illo ducimus neque corporis tenetur, vero eius nihil, 
 laboriosam provident illum quos perspiciatis autem exercitationem 
 similique at in excepturi? Eius voluptatem odit dolorem aliquid esse
  at aspernatur, neque suscipit, tempore quia recusandae, quo minima 
  vero non molestiae temporibus voluptates placeat quaerat provident. 
  Eveniet vero vel, veritatis hic ea illo nostrum cum! Quia ratione iure
   vero facilis a? Corporis omnis amet quasi quo. Impedit necessitatibus
    veniam maiores dolores deserunt eligendi totam amet,`,"https://www.youtube.com/embed/nJRctIV9i6A");
nazrul(`Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto,
temporibus eligendi tempora, quas perspiciatis accusantium error 
necessitatibus recusandae corrupti quod incidunt ab ea amet neque 
ratione suscipit, consectetur delectus quaerat deleniti earum illum
 quis laborum. Illo ducimus neque corporis tenetur, vero eius nihil, 
 laboriosam provident illum quos perspiciatis autem exercitationem 
 similique at in excepturi? Eius voluptatem odit dolorem aliquid esse
  at aspernatur, neque suscipit, tempore quia recusandae, quo minima 
  vero non molestiae temporibus voluptates placeat quaerat provident. 
  Eveniet vero vel, veritatis hic ea illo nostrum cum! Quia ratione iure
   vero facilis a? Corporis omnis amet quasi quo. Impedit necessitatibus
    veniam maiores dolores deserunt eligendi totam amet,`,"https://www.youtube.com/embed/q7ntpU-egbE");
nazrul(`Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto,
temporibus eligendi tempora, quas perspiciatis accusantium error 
necessitatibus recusandae corrupti quod incidunt ab ea amet neque 
ratione suscipit, consectetur delectus quaerat deleniti earum illum
 quis laborum. Illo ducimus neque corporis tenetur, vero eius nihil, 
 laboriosam provident illum quos perspiciatis autem exercitationem 
 similique at in excepturi? Eius voluptatem odit dolorem aliquid esse
  at aspernatur, neque suscipit, tempore quia recusandae, quo minima 
  vero non molestiae temporibus voluptates placeat quaerat provident. 
  Eveniet vero vel, veritatis hic ea illo nostrum cum! Quia ratione iure
   vero facilis a? Corporis omnis amet quasi quo. Impedit necessitatibus
    veniam maiores dolores deserunt eligendi totam amet,`,"https://www.youtube.com/embed/tFmKx2-sHiU");
nazrul(`Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto,
temporibus eligendi tempora, quas perspiciatis accusantium error 
necessitatibus recusandae corrupti quod incidunt ab ea amet neque 
ratione suscipit, consectetur delectus quaerat deleniti earum illum
 quis laborum. Illo ducimus neque corporis tenetur, vero eius nihil, 
 laboriosam provident illum quos perspiciatis autem exercitationem 
 similique at in excepturi? Eius voluptatem odit dolorem aliquid esse
  at aspernatur, neque suscipit, tempore quia recusandae, quo minima 
  vero non molestiae temporibus voluptates placeat quaerat provident. 
  Eveniet vero vel, veritatis hic ea illo nostrum cum! Quia ratione iure
   vero facilis a? Corporis omnis amet quasi quo. Impedit necessitatibus
    veniam maiores dolores deserunt eligendi totam amet,`,"https://www.youtube.com/embed/Ldm7V4vCdW");
nazrul(`Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto,
temporibus eligendi tempora, quas perspiciatis accusantium error 
necessitatibus recusandae corrupti quod incidunt ab ea amet neque 
ratione suscipit, consectetur delectus quaerat deleniti earum illum
 quis laborum. Illo ducimus neque corporis tenetur, vero eius nihil, 
 laboriosam provident illum quos perspiciatis autem exercitationem 
 similique at in excepturi? Eius voluptatem odit dolorem aliquid esse
  at aspernatur, neque suscipit, tempore quia recusandae, quo minima 
  vero non molestiae temporibus voluptates placeat quaerat provident. 
  Eveniet vero vel, veritatis hic ea illo nostrum cum! Quia ratione iure
   vero facilis a? Corporis omnis amet quasi quo. Impedit necessitatibus
    veniam maiores dolores deserunt eligendi totam amet,`,"https://www.youtube.com/embed/aRvkR3sEBwg");
nazrul(`Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto,
temporibus eligendi tempora, quas perspiciatis accusantium error 
necessitatibus recusandae corrupti quod incidunt ab ea amet neque 
ratione suscipit, consectetur delectus quaerat deleniti earum illum
 quis laborum. Illo ducimus neque corporis tenetur, vero eius nihil, 
 laboriosam provident illum quos perspiciatis autem exercitationem 
 similique at in excepturi? Eius voluptatem odit dolorem aliquid esse
  at aspernatur, neque suscipit, tempore quia recusandae, quo minima 
  vero non molestiae temporibus voluptates placeat quaerat provident. 
  Eveniet vero vel, veritatis hic ea illo nostrum cum! Quia ratione iure
   vero facilis a? Corporis omnis amet quasi quo. Impedit necessitatibus
    veniam maiores dolores deserunt eligendi totam amet,`,"https://www.youtube.com/embed/koUKc8HBbNg");
 
      

modalContent.addEventListener('click',function(e){
    e.preventDefault();
   let parentItem = e.target.value;
   if(parentItem == 1){
        let mainParent = e.target.parentElement.parentElement;
        modalContent.removeChild(mainParent);
   }
   
})   
