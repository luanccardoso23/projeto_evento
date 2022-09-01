let btnExcluir = document.querySelectorAll(".excluir")
let excluirItem = document.querySelector("#excluirEvento")

for(let item of btnExcluir){
    //console.log(item)
    item.addEventListener('click', ()=>{
        //console.log(item.getAttribute('id'))
        excluirItem.value = item.getAttribute('id')// ATRIBUINDO ID AO CAMPO ITEM
    })
    
}