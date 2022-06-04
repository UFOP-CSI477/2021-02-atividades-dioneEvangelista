import React, { useState } from 'react';
import { Link } from 'react-router-dom';

export default function SigninScreen() {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const submitHandler = (e) => {
    e.preventDefault();
    // TODO: sign in action
  };
  return (
    <div>
      <form className="form" onSubmit={submitHandler}>
        <div>
          <h1>Login</h1>
        </div>
        <div>
          <label htmlFor="email">Endereço de Email</label>
          <input
            type="email"
            id="email"
            placeholder="Informe seu e-mail"
            required
            onChange={(e) => setEmail(e.target.value)}
          ></input>
        </div>
        <div>
          <label htmlFor="password">Senha</label>
          <input
            type="password"
            id="password"
            placeholder="Informe sua senha"
            required
            onChange={(e) => setPassword(e.target.value)}
          ></input>
        </div>
        <div>
          <label />
          <button className="primary" type="submit">
            Login
          </button>
        </div>
        <div>
          <label />
          <div>
            Novo na nossa loja? <Link to="/register">Crie sua conta</Link>
          </div>
        </div>
      </form>
    </div>
  );
}