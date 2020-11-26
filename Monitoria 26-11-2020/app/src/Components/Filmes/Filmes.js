export default function Filmes(props) {
    return (
        <tr>
            <td>{props.id}</td>
            <td>{props.titulo}</td>
            <td>{props.descricao}</td>
            <td>{props.categoria}</td>
        </tr>
    );
}