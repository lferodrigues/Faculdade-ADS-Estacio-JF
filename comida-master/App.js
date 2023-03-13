import React, {Component} from 'react';
import {View,Text,Image,Button} from 'react-native';

class Janta extends Component{
  constructor(props) {
    super(props);
    this.state = {comida:props.comida};
    let comidas = ['Pizza','Lasanha','estrogonofe','Torta- alemã','Burguer','Palha Italiana'];

    setInterval(() => {
      this.setState(previousState =>{
      let n = Math.floor(Math.random() * comidas.length);
      return{comida: comidas[n]};
      });
    },1000);
  }
  render(){
    return(
      <View>
        <Text style={{textAlign:'center', fontWeight:'bold',fontSize:20,color:'red'}}>Hoje voce vai jantar: </Text>
        <Text style={{textAlign:'center',fontSize:18,color:'black'}}>{this.state.comida} </Text>
      </View>

    );
  }
}

export default class primeiro_projeto extends Component {
  render(){
  return(

  <View style={{paddingTop:30}}>
    <Janta comida='Biscoito'/>
  </View>

    );
  }
}

// Explicações
// O props é uma propriedade estatica no componente Ex.: Uma Imagem
// O padding da um espaçamento de acordo com a area e o numero de pontos q eu definir
//Ex.:{{paddingTop:20}} eu dei um espaçamento de 20 pontos do topo da tela do meu dispositivo
// todos os componentes criados terao que ter a primeira letra Maiuscula
//Para trabalhar com STATES, voce precisa criar um construtor para componente em que irá atribuir.
//dentro do construtor se passa o parametro das props
// Para que props pegue todas as propriedades do componente passa o mesmo dentro do super
