<?php
require_once 'Base.php';
/**
 * get_accounts_groupsの戻り値の型を指定
 * https://docs.link.getmoneytree.com/reference/get-link-corporate-accounts
 */
class Module_MoneyTree_Schema_GetAccounts_Response extends Module_MoneyTree_Schema_Base{
    /** @var array<Module_MoneyTree_Schema_GetAccount_Response_Accounts_Obj> */
    protected array $accounts;

    /**
     * 全プロパティに値をセットしてインスタンスを初期化します。
     *
     * @param array{
     *  accounts : array<Module_MoneyTree_Schema_GetAccount_Response_Accounts_Obj>
     * } $params
     * @return void
     */
    public function __construct(array $params)
    {
        try {
            $this->accounts = $this->make_children(Module_MoneyTree_Schema_GetAccount_Response_Accounts_Obj::class, $params["accounts"]);
        } catch (Throwable $e) {
            // 基本TypeErrorを想定しています。
            echo $e->getMessage();
        }
    }

    /**
     * 口座を取得
     *
     * @return array
     */
    public function get_accounts(): array { return $this->accounts; }
}

/**
 *
 */
class Module_MoneyTree_Schema_GetAccount_Response_Accounts_Obj {
    // https://docs.link.getmoneytree.com/reference/get-link-corporate-accounts
    // これをもとにプロパティを追加していく

    protected ?int    $id;
    protected ?int    $account_group;
    protected ?string $account_subtype;
    protected ?string $currency;
    protected ?string $institution_entity_key;
    protected ?string $institution_account_name;
    protected ?string $institution_account_number;
    protected ?string $nickname;
    protected ?string $branch_name;
    protected ?string $aggregation_state;
    protected ?string $aggregation_status;
    protected ?DateTime $last_aggregated_at;
    protected ?DateTime $last_aggregated_success;
    protected ?string $current_balance;
    protected ?string $current_balance_in_base;
    protected ?string $current_balance_data_source;
    protected ?string $branch_code;
    protected ?string $institution_account_type;
    protected ?string $created_at;
    protected ?string $updated_at;
    protected ?string $account_type;
    protected ?int $institution_id;

    /**
     * 全プロパティに値をセットしてインスタンスを初期化します。
     *
     * @param array{
     * id : int,
     * account_group : int,
     * account_subtype : string,
     * currency : string,
     * institution_entity_key : string,
     * institution_account_name : string,
     * institution_account_number : string,
     * nickname : string,
     * branch_name : string,
     * aggregation_state : string,
     * aggregation_status : string,
     * last_aggregated_at : string,
     * last_aggregated_success : string,
     * current_balance : string,
     * current_balance_in_base : string,
     * current_balance_data_source : string,
     * branch_code : string,
     * institution_account_type : string,
     * created_at : string,
     * updated_at : string,
     * account_type : string,
     * institution_id : int
     * } $params
     * @return void
     */
    public function __construct(array $params)
    {
        $this->id = $params["id"];
        $this->account_group = $params["account_group"];
        $this->account_subtype = $params["account_subtype"];
        $this->currency = $params["currency"];
        $this->institution_entity_key = $params["institution_entity_key"];
        $this->institution_account_name = $params["institution_account_name"];
        $this->institution_account_number = $params["institution_account_number"];
        $this->nickname = $params["nickname"];
        $this->branch_name = $params["branch_name"];
        $this->aggregation_state = $params["aggregation_state"];
        $this->aggregation_status = $params["aggregation_status"];
        $this->last_aggregated_at = $params["last_aggregated_at"];
        $this->last_aggregated_success = $params["last_aggregated_success"];
        $this->current_balance = $params["current_balance"];
        $this->current_balance_in_base = $params["current_balance_in_base"];
        $this->current_balance_data_source = $params["current_balance_data_source"];
        $this->branch_code = $params["branch_code"];
        $this->institution_account_type = $params["institution_account_type"];
        $this->created_at = $params["created_at"];
        $this->updated_at = $params["updated_at"];
        $this->account_type = $params["account_type"];
        $this->institution_id = $params["institution_id"];
    }

    /**
     * 口座IDを取得
     *
     * @return int
     */
    public function get_id(): int { return $this->id; }

    /**
     * 口座グループIDを取得
     *
     * @return int
     */
    public function get_account_group(): int { return $this->account_group; }

}

$param = [
    "accounts" => [
        [
            "id" => 1,
            "account_group" => 1,
            "account_subtype" => "account_subtype",
            "currency" => "currency",
            "institution_entity_key" => "institution_entity_key",
            "institution_account_name" => "institution_account_name",
            "institution_account_number" => "institution_account_number",
            "nickname" => "nickname",
            "branch_name" => "branch_name",
            "aggregation_state" => "aggregation_state",
            "aggregation_status" => "aggregation_status",
            "last_aggregated_at" => new DateTime(),
            "last_aggregated_success" => new DateTime(),
            "current_balance" => 'aaa',
            "current_balance_in_base" => 'aaa',
            "current_balance_data_source" => "current_balance_data_source",
            "branch_code" => "branch_code",
            "institution_account_type" => "institution_account_type",
            "created_at" => "created_at",
            "updated_at" => "updated_at",
            "account_type" => "account_type",
            "institution_id" => 1
        ]
    ]
];
$class = new Module_MoneyTree_Schema_GetAccounts_Response($param);
var_dump($class->to_array());
var_dump($class->get_accounts());