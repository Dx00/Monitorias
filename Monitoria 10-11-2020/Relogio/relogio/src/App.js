import Relogio from './Components/Relogio/Relogio';
import Forms from './Components/Relogio/Forms';

import './App.css';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <Relogio className="btn btn-sm btn-primary" texto="Qualquer texto bla bla bla" />
      </header>
      <main className="container">
        <Forms />
      </main>
    </div>
  );
}

export default App;
