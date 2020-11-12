import React from 'react';
class Relogio extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            date: new Date(),
            alerta: this.clicando.bind(this),
            texto: "Olá mundo!!!!"
        }
    }
    componentDidMount() {
        this.timerID = setInterval(
            () => this.tick(),
            1000
        );
    }
    clicando() {
        this.setState(
            { texto: "Olá mundo modificado." }
        )
    }
    tick() {
        this.setState(
            { date: new Date() }
        );
    }
    render() {
        return (
            <div>
                <h1>Olá Mundo!!!</h1>
                <h2>Agora são {this.state.date.toLocaleTimeString()}</h2>
                <p>{this.props.texto}</p>
                <p>{this.props.className}</p>
                <button onClick={this.state.alerta}
                    className={this.props.className}>Olá mundo</button>
                <p>{this.state.texto}</p>
            </div>
        );
    }
}
export default Relogio