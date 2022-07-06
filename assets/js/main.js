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
function addFileUplooad(){
    const fileUploadLists = document.querySelector('.file-upload-lists')
    const fileUploadList = document.createElement('li')
    fileUploadList.classList.add('file-upload-list')
    const FileAdd = document.createElement('span')
    FileAdd.classList.add('add')
    fileUploadList.append(FileAdd)
    fileUploadLists.append(fileUploadList)
}
function activeReviewInput(){
    const defaultReviewInput = document.querySelector('.review-input-default')
    const activeReviewInput = document.querySelector('.review-input-active')
    activeReviewInput.classList.remove('hidden')
    defaultReviewInput.classList.add('hidden')
}