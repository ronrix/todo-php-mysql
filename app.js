// error handling
const input = document.querySelector(".input");
const submitBtn = document.querySelector(".submitBtn");
const errorEl = document.querySelector(".errorEl");

submitBtn.onclick = (e) => {
    if(!input.value) {
        input.style.border = "1px solid red";
        errorEl.style.display = "block";
        errorEl.textContent = "please fill up the field";
        e.preventDefault();
    } else {
        input.style.border = "none";
        errorEl.style.display = "none";
        errorEl.textContent = "";
    }
}
// end of error handling

let iRemember;

// drag and drop for 'today'
const draggables = document.querySelectorAll(".today .drag");
const done = document.querySelector(".done");

// dragging the content
draggables.forEach((draggable) => {
    draggable.addEventListener('dragstart', (e) => {
        draggable.classList.add(`dragging`);
        iRemember = e.target.parentElement.className;
    });
    draggable.addEventListener('dragend', () => {
        draggable.classList.remove('dragging');
    });

});

done.addEventListener('dragover', (e) =>{
    e.preventDefault();
    const draggable = document.querySelector('.dragging');
    done.appendChild(draggable);
});
done.addEventListener('drop', (e) =>{
    e.preventDefault();
    const data = e.target.id.split(':');

    if(e.target.parentElement.className == iRemember) return;
    
    const link = document.createElement("a");
    link.href = `controller/update.php?id=${data[0]}&isDone=1`;
    link.click();
})
// end of dnd 'today'


// dnd for 'done'
const undoneDrag = document.querySelectorAll('.done .drag');
const high = document.querySelector('.high');
const low = document.querySelector('.low');

undoneDrag.forEach((draggable) => {
    draggable.addEventListener('dragstart', (e) => {
        draggable.classList.add(`dragging`);
        iRemember = e.target.parentElement.className;
    });

    draggable.addEventListener('dragend', ()=> {
        draggable.classList.remove(`dragging`);
    });
});

high.addEventListener("dragover", (e) =>{
    e.preventDefault();
    const draggable = document.querySelector('.dragging');
    high.appendChild(draggable);
});

high.addEventListener("drop", (e) =>{
    e.preventDefault();
    const draggable = document.querySelector('.dragging');
    const data = draggable.id.split(':');

    if(draggable.parentElement.className == iRemember) return;

    const link = document.createElement("a");
    link.href = `controller/update.php?id=${data[0]}&isDone=0&priority=high priority`;
    link.click();
});

low.addEventListener("dragover", (e) => {
    e.preventDefault();
    const draggable = document.querySelector('.dragging');
    low.appendChild(draggable);
});

low.addEventListener("drop", (e) => {
    e.preventDefault();
    const draggable = document.querySelector('.dragging');
    const data = draggable.id.split(':');

    if(draggable.parentElement.className === iRemember) return;

    const link = document.createElement("a");
    link.href = `controller/update.php?id=${data[0]}&isDone=0&priority=less priority`;
    link.click();
});

// yesterday dnd
const ysDraggable = document.querySelectorAll('.yesterday .drag');
ysDraggable.forEach(draggable => {
    draggable.addEventListener('dragstart', (e) => {
        draggable.classList.add(`dragging`);
        iRemember = e.target.parentElement.className;
    });
    draggable.addEventListener('dragend', () => {
        draggable.classList.remove(`dragging`);
    });
});
// end of yesterday dnd

// long ago dnd
const longAgo = document.querySelectorAll('.longAgo .drag');
longAgo.forEach(draggable => {
    draggable.addEventListener('dragstart', () => {
        draggable.classList.add(`dragging`);
    });
    draggable.addEventListener('dragend', () => {
        draggable.classList.remove(`dragging`);
    });
});




