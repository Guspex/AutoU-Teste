import {
  Component
} from 'react';
import Tabela from './Tabela'
//import api from './api'

class App extends Component {
  constructor() {
    super()
    this.state = ({
      db: []
    });
    this.exibirFuncionarios();
  }

  exibirFuncionarios() {
    fetch("http://localhost/api/autoucolaborador/src/Api/")
      .then((response) => response.json())
      .then((responseJson) => {
        this.setState({
          db: responseJson
        })
      });
  }
  render() {
    return ( 
    <div>
      <h1> Listar Clientes </h1> 
      <Tabela arrayFuncionarios={this.state.db} />
    </div>
    )
  }
}

export default App