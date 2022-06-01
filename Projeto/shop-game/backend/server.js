import express from 'express';
import data from './data.js';
import userRouter from './routers/userRouter.js';
import mongoose from 'mongoose';
const app = express();

mongoose.connect(process.env.MONGODB_URL || 'mongodb://localhost/shop-game', {
});

// mongodb+srv://shop:<1234>@cluster0.jkgjhcx.mongodb.net/?retryWrites=true&w=majority

app.use('/api/users', userRouter);

app.use((err, req, res, next) => {
  res.status(500).send({ message: err.message });
});

app.get('/api/products/:id', (req, res) => {
  const product = data.products.find((x) => x._id ===req.params.id);
  if (product) {
    res.send(product);
  } else {
    res.status(404).send({ message: 'Product Not Found' });
  }
});

app.get('/api/products', (req, res) => {
  res.send(data.products);
});
app.get('/', (req, res) => {
  res.send('Server is ready');
});
const port = process.env.PORT || 5000;
app.listen(port, () => {
  console.log(`Serve at http://localhost:${port}`);
});