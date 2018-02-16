<?php

use Illuminate\Database\Seeder;

class Tarefas extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    DB::table('tarefas')->insert([
      'texto' => "Comprar passagens aéreas.",
      'autor' => "Vinicius Monteiro Arjonas",
      'status' => 'Concluído',
      'created_at' => date('Y-m-d h:i:s')
    ]);
    DB::table('tarefas')->insert([
      'texto' => "Fazer compras no mercado.",
      'autor' => "Vinicius Monteiro Arjonas",
      'status' => 'Pendente',
      'created_at' => date('Y-m-d h:i:s')
    ]);
    DB::table('tarefas')->insert([
      'texto' => "Estudar para a prova",
      'autor' => "Daiane Monteiro Rocha Alves",
      'status' => 'Pendente',
      'created_at' => date('Y-m-d h:i:s')
    ]);
  }
}
