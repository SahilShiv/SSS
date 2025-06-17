let loadMoreBtn = document.querySelector('package .load-more .btn');
let currentItem=3;

loadMoreBtn.onclick=()=>{
    let boxes=[...document.querySelectorAll('.package .box-cont .box')];
    for(var i=currentItem; i<currentItem+3; i++){
        boxes[i].computedStyleMap.display='inline-block';

    };
    if(currentItem >=boxes.length){
    loadMoreBtn.style.display='none';
    }
}