require 'test_helper'

class GohansControllerTest < ActionDispatch::IntegrationTest
  test "should get index" do
    get gohans_index_url
    assert_response :success
  end

  test "should get new" do
    get gohans_new_url
    assert_response :success
  end

  test "should get show" do
    get gohans_show_url
    assert_response :success
  end

  test "should get edit" do
    get gohans_edit_url
    assert_response :success
  end

  test "should get create" do
    get gohans_create_url
    assert_response :success
  end

  test "should get update" do
    get gohans_update_url
    assert_response :success
  end

  test "should get destroy" do
    get gohans_destroy_url
    assert_response :success
  end

end
