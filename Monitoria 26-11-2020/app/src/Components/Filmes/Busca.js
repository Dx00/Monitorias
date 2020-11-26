import { useEffect, useState } from 'react';
import { Form } from "react-bootstrap";
import Filmes from './Filmes';
import './busca.css'

export default function Busca(props) {
    const [filmes, setFilmes] = useState([]);

    const quandoDigitado = (evento) => {

        const valor = evento.target.value;
        console.log(valor);

        const url = `http://localhost:8080/filmes.php?busca=${valor}`;
        fetch(url).then(resposta => resposta.json()).then(resultado => setFilmes(resultado));

    }

    useEffect(() => {
        console.log("Olá mundo.")
    }, [filmes]);

    return (
        <div className="row">
            <div className="col-lg-6 col-md-6 mx-auto">
                <Form>
                    <Form.Label>Buscar Filme Titulo</Form.Label>
                    <Form.Control type="text" onKeyUp={quandoDigitado} />
                </Form>
                <div className="tabela-limitada">
                    <table className="table table-striped">
                        <tbody>
                            {filmes && filmes.map(filme => <Filmes key={filme.id} id={filme.id} titulo={filme.titulo} descricao={filme.descricao} categoria={filme.categoria} />)}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    )
}