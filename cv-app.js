const express = require('express');
const app = express();
// const path = require('path');
app.use(express.static('/public'));
app.listen(2000, () => console.log('Server is ready and listens at 2000'))