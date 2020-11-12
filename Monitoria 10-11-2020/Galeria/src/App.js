import Menu from './Components/Menu/Menu'
import Categorias from './Components/Categorias/Categorias'
import Galeria from './Components/Galeria/Galeria'
import './App.css';

function App() {
  return (
    <div className="App">
      <header>
        <Menu />
      </header>
      <main className="container">
        <div className="row mt-4">
          <Galeria />
          <Categorias />
        </div>
      </main>
    </div>
  );
}

export default App;
