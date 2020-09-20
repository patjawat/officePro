import React,{useState} from 'react'

function Counter() {
    const [count,setCounter] = useState(0);
    let showStatus;
    if(count > 2){
        showStatus = <Login />;
    }else{
        showStatus = <Logout />
    }
    return (
        <div>
            <h1>Counter : {count}</h1>
            <button className="btn btn-primary" onClick={()=> setCounter(count+1)}>Click + </button>{' '}
            <button className="btn btn-danger" onClick={()=> setCounter(count-1)}>Click - </button>
            <br />
            {showStatus}
           
        </div>
    )
}

function Login(){
    return <h1 className="text-success">Login</h1>
}

function Logout(){
    return <h1 className="text-danger">LogOut</h1>
}
export default Counter;
