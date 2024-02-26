console.log(`I am here`);

function makeRequest(method,url,data){
    const xht = new XMLHttpRequest();
    xht.open(method,url);
    xht.setRequestHeader('Content-type', 'application/json; charset=UTF-8');
    xht.onload = ()=>{
        let data = xht.response;
        console.log(JSON.parse(data));
    }
    xht.send(JSON.stringify(data)); 
}
function getData(){
    makeRequest('GET','https://jsonplaceholder.typicode.com/posts')
}
function sendData(){
    makeRequest('POST','https://jsonplaceholder.typicode.com/posts',{
        title: 'foo',
        body: 'bar',
        userId: 1,
    })
}
function updataData(){
    makeRequest('PUT','https://jsonplaceholder.typicode.com/posts/1',{
        id: 1,
        title: 'Mamun',
        body: 'Hossen',
        userId: 1,
    })
}
function updataSingleData(){
    makeRequest('PATCH','https://jsonplaceholder.typicode.com/posts/1',{
        body: 'Hossen',
    })
}
function deleteData(){
    makeRequest('DELETE','https://jsonplaceholder.typicode.com/posts/1',{
        
    })
}
// sendData();
// getData();
// updataData();
// updataSingleData();
deleteData();
