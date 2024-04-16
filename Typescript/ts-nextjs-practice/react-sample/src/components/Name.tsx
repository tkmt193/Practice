import React from "react"
const Name = () =>{
    const onChange = (e: React.ChangeEvent<HTMLInputElement>) =>{
        console.log(e.target.value)
    }
    return (
        <div style = {{padding:'16px',backgroundColor:'grey'}}>
            {/* forの代わりにhtmlForを使います*/}
            <label htmlFor="name">名前</label>
            {/* classやforの代わりに、classNameやonChanegeを使います*/}
            <input id="name" className="input-name" type="text"onChange={onChange} />
        </div>
    )
}
export default Name