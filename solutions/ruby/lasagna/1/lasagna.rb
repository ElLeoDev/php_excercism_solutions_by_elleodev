class Lasagna
  EXPECTED_MINUTES_IN_OVEN = 40
  
  def remaining_minutes_in_oven(actual_minutes_in_oven)
    # raise 'Please implement the Lasagna#remaining_minutes_in_oven method'
    raise(StandardError, "Parameter 'actual_minutes_in_oven' must be an integer") unless actual_minutes_in_oven.is_a?(Integer)
    EXPECTED_MINUTES_IN_OVEN - actual_minutes_in_oven
  end

  def preparation_time_in_minutes(layers)
    # raise 'Please implement the Lasagna#preparation_time_in_minutes method'
    raise(StandardError, "Parameter 'layers' must be an integer") unless layers.is_a?(Integer)
    layers * 2
  end

  def total_time_in_minutes(number_of_layers:, actual_minutes_in_oven:)
    # raise 'Please implement the Lasagna#total_time_in_minutes method'
    raise(StandardError, "Parameter 'number_of_layers' must be an integer") unless number_of_layers.is_a?(Integer)
    raise(StandardError, "Parameter 'actual_minutes_in_oven' must be an integer") unless actual_minutes_in_oven.is_a?(Integer)
    preparation_time_in_minutes(number_of_layers) + actual_minutes_in_oven
  end
end
