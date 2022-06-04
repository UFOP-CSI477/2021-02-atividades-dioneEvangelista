import React from 'react';
import { BrowserRouter, Route, Link, Routes} from 'react-router-dom';
import HomeScreen from './screens/HomeScreen';
import ProductScreen from './screens/ProductScreen';
import CartScreen from './screens/CartScreen';
import SigninScreen from './screens/SinginScreen';
import { useSelector } from 'react-redux';


function App() {
  const cart = useSelector((state) => state.cart);
  const { cartItems } = cart;
  return (
    <BrowserRouter>
      <div className="grid-container">
        <header className="row">
          <div>
            <Link className="brand" to="/">
              Meujogo
            </Link>
          </div>
          <div>
            <Link to="/cart">
              Carrinho
              {cartItems.length > 0 && (
                <span className="badge">{cartItems.length}</span>
              )}
            </Link>
            <Link to="/signin">Login</Link>
          </div>
        </header>
        <main>
        <Routes>
          <Route path="/cart/:id" element={<CartScreen/>}/>
          <Route path="/product/:id" element={<ProductScreen/>}></Route>
          <Route path="/signin" element={<SigninScreen/>}></Route>
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
