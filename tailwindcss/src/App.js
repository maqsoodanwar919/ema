import { useState } from 'react';
import './App.css'; 

function App() { 

  let [status, setStatus] = useState(false);

  return (
    <div className="App"> 
    <button className='bg-[red] px-[20px] py-[10px]' onClick={()=>setStatus(!status)}> { (status)  ?  'Show' :  'Hide'  }</button> 
    
      { (status)  ?  <h1>status true</h1> :  ""  }
    </div>
  );
}

export default App;
