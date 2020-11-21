let socket = io("http://bank-tail-server-bank-tail-system.192.168.42.136.nip.io/")
let label = $('#lblNewTicket')


socket.on('connect', () => {
    console.log('Connected to server')
})

socket.on('currentStatus', (currentStatus) => {
    label.text(currentStatus.ticket)
})

socket.on('disconnect', () => {
    console.log('Disconnected from server')
})

$('button').click(() => {
    socket.emit('nextTicket', (ticket) => {
        label.text(ticket)
    })
})