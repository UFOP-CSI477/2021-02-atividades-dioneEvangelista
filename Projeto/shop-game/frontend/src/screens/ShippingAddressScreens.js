import React, { useState } from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { useNavigate } from 'react-router-dom';
import { saveShippingAddress } from '../actions/cartActions';
import CheckoutSteps from '../components/CheckoutSteps';

export default function ShippingAddressScreen(props) {
  const navigate = useNavigate();
  const userSignin = useSelector((state) => state.userSignin);
  const { userInfo } = userSignin;

// Para consertar o erro do endereço vir preenchido.
  // const cart = useSelector((state) => state.cart);
  // const { shippingAddress } = cart;
  // if (!userInfo) {
  //   navigate('/signin');
  // }
  // const [fullName, setFullName] = useState(shippingAddress.fullName);
  // const [address, setAddress] = useState(shippingAddress.address);
  // const [city, setCity] = useState(shippingAddress.city);
  // const [postalCode, setPostalCode] = useState(shippingAddress.postalCode);
  // const [country, setCountry] = useState(shippingAddress.country);

  // const cart = useSelector((state) => state.cart);
  // const { shippingAddress } = cart;
  if (!userInfo) {
    navigate('/signin');
  }
  const [fullName, setFullName] = useState('');
  const [address, setAddress] = useState('');
  const [city, setCity] = useState('');
  const [postalCode, setPostalCode] = useState('');
  const [country, setCountry] = useState('');


  const dispatch = useDispatch();
  const submitHandler = (e) => {
    e.preventDefault();
    dispatch(
      saveShippingAddress({ fullName, address, city, postalCode, country })
    );
    navigate('/payment');
  };
  return (
    <div>
      <CheckoutSteps step1 step2></CheckoutSteps>
      <form className="form" onSubmit={submitHandler}>
        <div>
          <h1>Endereço de Entrega</h1>
        </div>
        <div>
          <label htmlFor="fullName">Nome Completo</label>
          <input
            type="text"
            id="fullName"
            placeholder="Insira seu nome completo"
            value={fullName}
            onChange={(e) => setFullName(e.target.value)}
            required
          ></input>
        </div>
        <div>
          <label htmlFor="address">Endereço</label>
          <input
            type="text"
            id="address"
            placeholder="Informe o endereço"
            value={address}
            onChange={(e) => setAddress(e.target.value)}
            required
          ></input>
        </div>
        <div>
          <label htmlFor="city">Cidade</label>
          <input
            type="text"
            id="city"
            placeholder="Informe a cidade"
            value={city}
            onChange={(e) => setCity(e.target.value)}
            required
          ></input>
        </div>
        <div>
          <label htmlFor="postalCode">CEP</label>
          <input
            type="text"
            id="postalCode"
            placeholder="CEP"
            value={postalCode}
            onChange={(e) => setPostalCode(e.target.value)}
            required
          ></input>
        </div>
        <div>
          <label htmlFor="country">Pais</label>
          <input
            type="text"
            id="country"
            placeholder="Pais"
            value={country}
            onChange={(e) => setCountry(e.target.value)}
            required
          ></input>
        </div>
        <div>
          <label />
          <button className="primary" type="submit">
            Continuar
          </button>
        </div>
      </form>
    </div>
  );
}