import { useEffect, useState } from 'react';

import { Form, Button } from 'react-bootstrap';
import Filmes from './Filmes';

export default function Formulario(props) {

    const [filmes, setFilmes] = useState([])

    const controleEnvio = async (evento) => {
        evento.preventDefault();

        const url = "http://localhost:8080/filmes.php";
        const dados = new FormData(evento.target);
        const cabecalho = {
            method: "POST",
            body: dados,
        };

        const resposta = await fetch(url, cabecalho);
        const resultado = await resposta.json();
        console.log(resultado)
    }

    useEffect(() => {
        async function mostraFilmes() {
            const url = "http://localhost:8080/filmes.php";
            const resposta = await fetch(url);
            const resultado = await resposta.json();
            setFilmes(resultado);
        }
        mostraFilmes();
        return () => { }
    });

    return (
        <div className="container">
            <div className="row">
                <div className="col-lg-6 col-md-5 mx-auto">
                    <Form onSubmit={controleEnvio}>
                        <Form.Label>Titulo</Form.Label>
                        <Form.Control type="text" id="titulo" name="titulo" />

                        <Form.Label>Descricao</Form.Label>
                        <Form.Control type="text" id="descricao" name="descricao" />

                        <Form.Label>Categoria</Form.Label>
                        <Form.Control type="text" id="categoria" name="categoria" />

                        <Button variant="info" type="submit">Cadastrar</Button>
                    </Form>
                </div>
            </div>
            <div className="row">
                <div className="col-lg-12 col-md-12 mx-auto">
                    <table className="table table-stripe">
                        <tbody>
                            {filmes && filmes.map(filme => <Filmes key={filme.id} id={filme.id} titulo={filme.titulo} descricao={filme.descricao} categoria={filme.categoria} />)}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    );
}