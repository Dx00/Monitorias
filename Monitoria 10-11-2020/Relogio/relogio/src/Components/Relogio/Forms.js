import React from 'react';
import './forms.css'
class Forms extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            texto: "Olá Mundo"
        };
        this.mudarTexto = this.mudarTexto.bind(this);
    }
    mudarTexto(evento) {
        console.log(evento.target.value);
        this.setState(
            { texto: evento.target.value }
        );
    }
    render() {
        return (
            <div>
                <form>
                    <input onKeyUp={this.mudarTexto} id="texto" type="text" />:
                </form>
                <p>{this.state.texto}</p>
            </div>
        );
    }
}
export default Forms;