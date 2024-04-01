 import './App.css';
 import { Header } from './Header';
 import { Footer } from './Footer';
 import 'bootstrap/dist/css/bootstrap.min.css';  
function App() { 
  let obj={
     email:"maqsood@gmail.com",
     phone:"1131646465484",

  }
  return (
    <div className="App">  
        <Header obj={obj} >
          <h1>Maqsood Anwar</h1>
          <h1>Maqsood Ali</h1>
        </Header> 
         <div className='container'>
            <h1 className='text-danger'>start </h1> 
         </div> 
        <Footer />
    </div>
  );
}

export default App;



 