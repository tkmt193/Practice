const Hello = () =>{
    const onClick = () =>{
        alert('hello')
    }
    const text = 'Hello, React'
    return (
        <div onClick={onClick}>{text}</div>
    )
}
//外部からHelloを読み込めるようにexport
export default Hello