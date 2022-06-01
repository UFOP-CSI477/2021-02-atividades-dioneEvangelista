import React from 'react';
import { BrowserRouter, Link, Route, Routes } from 'react-router-dom';
import HomeScreen from './screens/HomeScreen';
import ProductScreen from './screens/ProductScreen';

function App() {
  return (
    <BrowserRouter>
      <div className="grid-container">
        <header className="row">
          <div>
            <Link className="brand" to="index.html">
              Meujogo
            </Link>
          </div>
          <div>
            <a href="/cart">Carrinho</a>
            <a href="/signin">Realizar login!</a>
          </div>
        </header>
        <main>
      <Routes>
          <Route path="/product/:id" element={<ProductScreen/>}></Route>
          <Route path="/" element={<HomeScreen/>} exact></Route>
      </Routes>
      </main>
        <footer className="row center">
          Projeto desenvolvido em Sistemas Web I
        </footer>
      </div>
    </BrowserRouter>
  );
}
export default App
