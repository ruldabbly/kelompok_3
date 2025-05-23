function popUp(pesan){
        alert(pesan);
        document.getElementById('register').removeAttribute('onclick');
        document.getElementById('login').removeAttribute('onclick');
        document.getElementById('sreg').removeAttribute('onclick');
        document.getElementById('slog').removeAttribute('onclick');
    };
window.alert = function(message, timeout=null){
    const alert = document.createElement('div');
    const btnok = document.createElement('button');
    const ul = document.createElement('ul');
    const listItems = ['Gilang Adriansyah N.P','Moch. Andi Dzikri','Pajar Nurcholis Ependi','Ruliana','Samsul Mutaqin'];
    listItems.forEach(item=> {
        const li = document.createElement('li');
        li.textContent = item;
        ul.appendChild(li);
    });
    ul.setAttribute('style',`
            margin-top:10px;
            padding:0 20px;
        `)
    btnok.innerHTML = 'ok';
    alert.classList.add('alert');
    alert.setAttribute('style',`
        width: 300px;
        height: auto;
        position: relative;
        top:100px;
        margin: 50%;
        padding:20px;
        border-radius:12px;
        box-shadow:0 1px 0 #fff, -1px 0 0 #fff, 1px 0 0 #fff, 0 -1px 0 #fff;
        display:flex;
        flex-direction:column;
        z-index:99;
        color:#fff;
    `);
    btnok.setAttribute('style',`
        width:50px;
        position:absolute;
        bottom:20px;
        right:20px;
        color:#fff;
        border:none;
        outline:none;
        border:1px solid #fff;
        background:transparent;
    `)
    alert.innerHTML = `<span>${message}</span>`;
    alert.appendChild(btnok);
    alert.appendChild(ul);
    btnok.addEventListener('click',function(e){
        alert.remove();
    })
    if(timeout != null){
        setTimeout(()=>{
            alert.remove();
        }, Number(timeout))
    }
    if(document.get)
    btnok.addEventListener('click',function(){
        document.getElementById('login').setAttribute('onclick',`popUp('Kelompok 3')`);
        document.getElementById('register').setAttribute('onclick',`popUp('Kelompok 3')`);
        document.getElementById('sreg').setAttribute('onclick',`popUp('Kelompok 3')`);
        document.getElementById('slog').setAttribute('onclick',`popUp('Kelompok 3')`);
    })
    document.body.appendChild(alert);
}