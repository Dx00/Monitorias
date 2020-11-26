import { Form, Button } from 'react-bootstrap';

export default function Formulario(props) {

    const controleEnvio = async (evento) => {
        evento.preventDefault();

        const url = "http://localhost:8080/filmes.php";
        const dados = new FormData(evento.target);
        const cabecalho = {
            method: "POST",
            body: dados,
        };

        const resposta = await fetch(url, cabecalho);
        const resultado = await resposta.json()

        console.log(resultado);

    }

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
        </div>
    );
}