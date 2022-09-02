 <?php
    class Conexao
    {
        private static $dsn = 'mysql:host=localhost;dbname=ACADEMIA;port=3306';
        private static $usuario = 'root';
        private static $senha = 'luis7180';
        private static $conexao = null;

        public static function getConexao()
        {
            if (Conexao::$conexao == null) {
                try {
                    Conexao::$conexao = new PDO(Conexao::$dsn, Conexao::$usuario, Conexao::$senha);
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
            }
            return Conexao::$conexao;
        }
        public static function getPreparedStatement($sql)
        {
            $pst = null;
            if (Conexao::getConexao() != null) {
                try {
                    $pst = Conexao::$conexao->prepare($sql);
                } catch (PDOException $e) {
                    $e->getMessage();
                }
            }
            return $pst;
        }
    }
    Conexao::getConexao();
    ?>
    