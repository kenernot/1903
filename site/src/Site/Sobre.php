<?php

namespace Site;

class Sobre {
	
	public function getAbout() {
		$texto['titulo'] = "Sobre:";
		
		$texto['corpo'] =	"Comum... Ou melhor, NECESSÁRIO! Esse é o contexto dos sistemas de informação computacionais no momento.".
							" Toda empresa que visa crescer e se manter viva no cenário do mercado competitivo deve buscar novas formas".
							" de melhorar seus processos, com qualidade e com os menores riscos possíveis.".
							" Levando em conta este contexto, a 'Minha incrível APP' vem de um histórico de 3 anos de crescimento e evolução.".
							" Atualmente conta com os recursos de página inicial, podendo mostrar as últimas notícias de seu negócio e com a página de produto, para a apresentação dos produtos que você deseja mostrar para seus clientes!".
							"Este sistema foi desenvolvido utilizando Routing e MVC! A modelagem e renderização foram feitas utilizando Twig, e por fim, para gerenciar as dependências, utilizou-se o Composer!".
							
							"";
		
		$texto['lista'] = array(
			array(
				"O que é um framework?",
				"R: É um conjunto de código que tem um padrão e é comum em vários projetos, sendo assim reutilizável."
			),array(
				"O que é padrão de projeto?",
				"R: Padrões de projeto são modelos de desenvolvimento que demonstraram eficácia em seus objetivos, onde, foram testados por vários desenvolvedores."
			),array(
				"Quais as principais categorias de padrões de projetos?",
				"R: As principais categorias são: criação, comportamento e de estrutura."
			),array(
				"Qual o principal padrão de projeto utilizado nesta aplicação?",
				"R: O principal padrão de projeto utilizado nesta aplicação foi o MVC (Model View Controller)."
			)
		);
		
		
		
		return $texto;
	}
	
}