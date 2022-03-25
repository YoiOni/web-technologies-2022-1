export default class PostItem {
    constructor(el) {
        this.el = el
        this.postId= +new URL(window.location.href).searchParams.get('id')
        this.getInfo()
    }

    async getInfo() {
        const postUrl = `https://jsonplaceholder.typicode.com/posts/${this.postId}`
        const a= await fetch(postUrl)
        const aJson= await a.json()
        const commentUrl=`https://jsonplaceholder.typicode.com/posts/${this.postId}/comments`
        const commentData=await fetch(commentUrl)
        const commentDataJson= await commentData.json()
        this.renderItem(aJson,commentDataJson)
    }

    renderItem(item,commentData) {
        let html = `<div class="tittle"> ${item.title}</div>
                    <div class="post_text"> ${item.body}</div>
                    <div class="comment_block">`
        commentData.forEach(commentItem=>{
            html+=`<div class="authors_email"> ${commentItem.email}</div>
                   <div class="comment_tittle">${commentItem.name}</div>
                   <div class="comment_body">${commentItem.body}</div>`
        })
        this.el.innerHTML = html+`</div>`
    }

}
