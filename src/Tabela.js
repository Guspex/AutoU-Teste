import React from "react"
export default class Tabela extends React.Component {
    render() {
        return (
            <div>
                {this.props.arrayFuncionarios.map(
                    row=><div>
                        {row.nome}
                        </div>
                )}
            </div>
        )
    }
}