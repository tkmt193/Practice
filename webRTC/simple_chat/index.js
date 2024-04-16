const express = require('express')
const app = express()
const server = require('http').createServer(app);
const io = require('socket.io')(server)
const port = 3000
const rooms = []


app.set('view engine','ejs');
app.use(express.static('public'));

app.get('/', (req, res) => {
  res.send('Hello World!')
})

app.get('/zoom', (req, res) => {
  res.render('zoom');
});

app.get('/', (req, res) => {
  res.sendFile(__dirname + '/index.html');
});

io.on('connection', (socket) => {
    console.log('a user connected');
    socket.emit('message','ビデオチャットにようこそ！');
    socket.broadcast.emit('message','新しいユーザが接続されました。');
    socket.on('message',(msg)=>{
      io.emit('message',msg)
    })
    socket.on('disconnect',()=> {
      io.emit('message','ユーザからの接続が切れました。')
    }); 
  });

server.listen(port, () => {
  console.log('listening on *:3000');
})