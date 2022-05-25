import data from "./data";

function App() {
  return (
    <div className="grid-container">
    <header className="row">
      <div>
        <a className="marca-site" href="index.html">Shop-Game</a>
      </div>
      <div>
        <a href="/cart">Carrinho</a>
        <a href="/signin">Realizar login!</a>
      </div>
    </header>
    <main>
      <div className="row center">
        { data.products.map((product) => (
        <div key={product._id} className="card">
       <a href={`/product/${product._id}`}>
       <img
                    className="medium"
                    src={product.image}
                    alt={product.name}
                  />
        </a>
        <div className="card-body">
        <a href={`/product/${product._id}`}>
            <h2>{product.name}</h2>
          </a>
          <div className="preco">
          ${product.price}
          </div>
        </div>
      </div>
        ))}
      </div>
    </main>
    <footer className="row center">Projeto desenvolvido em Sistemas Web I</footer>
  </div>
  );
}

export default App;
