function liveChatOpen(){
    const liveChatWrap = document.querySelector('.live-chatting-wrap')
    liveChatWrap.classList.toggle('on')
}
function liveChatClose(){
    const liveChatWrap = document.querySelector('.live-chatting-wrap')
    liveChatWrap.classList.remove('on')
}
function searchExpand(event){
    const target = event.currentTarget
    const targetSearch = target.parentNode
    const targetSearchImg = targetSearch.querySelector('img')
    targetSearch.classList.toggle('on')
    if(targetSearch.classList.contains('on')){
        targetSearchImg.src = '/assets/img/icon-search.png'
    }else{
        targetSearchImg.src = '/assets/img/icon-search-grey.png'
    }

}