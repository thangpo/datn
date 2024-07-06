const socket = io('http://127.0.0.1:8000/views/5');

socket.on('message-received', (data) => {
    console.log('New message: ', data.message);
    // Hiển thị thông báo cho người dùng
});