import React from 'react';

class Relogio extends React.Component {
    constructor(props) {
        super(props);
        this.state = { date: new Date() }
    }

    componentDidMount() {
        this.timerID = setInterval(
            () => this.tick(),
            1000
        );
    }

    componentWillUnmount() {
        clearInterval(this.timerID);
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
                <button className={this.props.className}>Olá mundo</button>
            </div>
        );
    }
}

export default Relogio