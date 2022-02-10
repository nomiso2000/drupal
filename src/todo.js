let addMsg = document.querySelector('.msg');
let addBtn = document.querySelector('.add');
let todo = document.querySelector('.todo');

let todoList = [];

if(localStorage.getItem('todo')) {
  todoList = JSON.parse(localStorage.getItem('todo'));
  displayMsg();
}

addBtn.addEventListener('click', () => {
  if (addMsg.value.length > 2) {
    let newTodo = {
      todo: addMsg.value,
      checked: false,
    };
    todoList.push(newTodo);
    displayMsg();
    localStringify('todo', todoList);
  } else {
    alert('Write something!');
  }


})

function displayMsg(){
  let displayMsg = '';
  if (todoList.length !== 0) {
    let res = todoList.sort(compare);
      res.forEach((item, index) => {
        displayMsg += `
           <li>
            <input type='checkbox' id='item_${index}' ${item.checked ? 'checked' : ''}/>
            <label for='item_${index}'>${item.todo}</label>
            <button class="delete" id='${index}'>Delete</button>
           </li>`;
        todo.innerHTML = displayMsg;
      });
  } else {
    todo.innerHTML = '<li>U dont have any tasks</li>'
  }
}

todo.addEventListener('change', (event) => {
  let idInput= event.target.getAttribute('id');

  let valueLabel = todo.querySelector(`[for=${idInput}]`).innerHTML
  todoList.forEach((item) => {
    if(item.todo === valueLabel){
      item.checked = !item.checked
      localStringify('todo', todoList);
  }})
})

todo.addEventListener('click', (event) => {
  if(event.path[0].className === 'delete') {
      todoList.splice(event.path[0].id, 1);
      localStringify('todo', todoList);
      displayMsg();
  }

 })

 function compare(a,b) {
   if(a.checked === false) {   return -1;}
   if(b.checked === true) {    return 1;}
  return 0
 }
 function localStringify(key, data) {
  localStorage.setItem(key, JSON.stringify(data));
 return;
 }